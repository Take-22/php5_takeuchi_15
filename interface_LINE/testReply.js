// 応答メッセージURL
const REPLY = "https://api.line.me/v2/bot/message/reply";

// アクセストークン
const ACCESS_TOKEN = "++45gcv6xxu+5cgAVZLMq76e7mQUU7XkJYAoib0oJvbcFZPMBJNVoJ/i6WM0htn5rvmEIuoluYdZDoUJJFHmOhFUYD/nkw2ztruH0mx02Rety0P/YuKZIZnppkBcR5e4SY8uJjBpsv+/eyj494RgswdB04t89/1O/w1cDnyilFU=";

function doGet(e){
  let result = {};
  if (e.parameter == undefined){
    // 受信に失敗した場合
    result['result'] = 'NG';
    alert("失敗");                              //test

  }else{
    // 受信に成功した場合
    const val = e.parameter['val'];
    SHEET_DATA.appendRow([val]);
    result['result'] = 'OK';
    alert("成功");                              //test

  }
  return ContentService.createTextOutput(JSON.stringify(result));
}

function doPost(e) {
  //メッセージ受信
  const data = JSON.parse(e.postData.contents).events[0];

  console.log(data);
  alert(data);
  
  //ユーザーID取得
  const lineUserId = data.source.userId;
  // リプレイトークン取得
  const replyToken = data.replyToken;
  // 送信されたメッセージ取得
  const postMsg = data.message.text;
  // 出勤しているかの確認
  const UserData = findUser(lineUserId);

  // ログにポスト内容とユーザー情報を記載
  debugLog(postMsg, lineUserId);
  
  // 交通費精算の処理の為のフラッグ
  let transportationFlag = 0;
  transportationFlag = postMsg.indexOf("から");
  
  if (transportationFlag > 0) {
    // 交通費精算の処理
    ekisupa(replyToken, postMsg, lineUserId);
  } else if (typeof UserData === "undefined") {
    // 「現在の出勤状況」のシートにデータがなかった場合の処理
    if ('オフィス出勤' === postMsg || 'テレワーク' === postMsg ) {
      flexMessage(replyToken, postMsg, lineUserId);
      userlog(postMsg, lineUserId);
    } else {
      sendMessage(replyToken, '「オフィス出勤」もしくは「テレワーク」と送信ください。');
    }
  } else {
  
    // 出勤があった場合の処理
    if ('退勤' === postMsg) {
      sendMessage(replyToken, '本日もお疲れ様でした！');
      userLeave(lineUserId);
    } else if ('離着席' === postMsg) {
      userTemporarilyLeave(replyToken, lineUserId);
    } else {
      sendMessage(replyToken, `${UserData}さんはすでに出勤済みです。\n「退勤」と送信すると退勤できます。`);
    }
  }
}

function testPost(e) {                              //test
  //メッセージ受信
  const data = JSON.parse(e.postData.contents).events[0];
  //ユーザーID取得
  const lineUserId = data.source.userId;
  // リプレイトークン取得
  const replyToken = data.replyToken;
  // 送信されたメッセージ取得
  const postMsg = data.message.text;
  // 出勤しているかの確認
  const UserData = findUser(lineUserId);

  console.log(replyToken);
  console.log(postMsg);
  console.log(UserData);

}

///////////////////////////////
// 出勤しているかのユーザー検索
///////////////////////////////
function findUser(uid) {
  return getUserData().reduce(function(uuid, row) { return uuid || (row.key === uid && row.value); }, false) || undefined;
}

///////////////////////////////
// 出勤していた場合のユーザー情報取得
///////////////////////////////
function getUserData() {
  const data = SHEET_DATA.getDataRange().getValues();
  return data.map(function(row) { return {key: row[0], value: row[1]}; });
}

///////////////////////////////
// テキストreplyメッセージ
///////////////////////////////
function sendMessage(replyToken, replyText) {
  const postData = {
    "replyToken" : replyToken,
    "messages" : [
      {
        "type" : "text",
        "text" : replyText
      }
    ]
  };
  return postMessage(postData);
}

///////////////////////////////
// JSON形式データをPOST
///////////////////////////////
function postMessage(postData) {
  const headers = {
    "Content-Type" : "application/json; charset=UTF-8",
    "Authorization" : "Bearer " + ACCESS_TOKEN
  };
  const options = {
    "method" : "POST",
    "headers" : headers,
    "payload" : JSON.stringify(postData)
  };
  return UrlFetchApp.fetch(REPLY, options);
}
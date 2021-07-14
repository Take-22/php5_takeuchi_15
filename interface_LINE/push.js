// プッシュメッセージURL
const push = 'https://api.line.me/v2/bot/message/broadcast';

///////////////////////////////
// テキストpushメッセージ
///////////////////////////////
function broadcast(message) {
  UrlFetchApp.fetch(push, {
    method: 'post',
    headers: {
      'Content-Type': 'application/json',
      'Authorization': 'Bearer ' + ACCESS_TOKEN,
    },
    payload: JSON.stringify({
      messages: [
        {
          type: 'text',
          text: message
        },
      ]
    }),
  });
}
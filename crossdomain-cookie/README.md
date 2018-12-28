# クロスドメインでCookieを受け渡しするサンプル

- XHRが必要
    - `crossDomain: true`
    - `xhrFields: { withCredentials: true }`

## 使い方

1. ブラウザで `http://aosho235.com/test/crossdomain-cookie/cookie-provider/setcookie.php` にアクセス→Cookieがセットされる
2. `http://18.179.118.46/index.html` (cookie-user) にアクセス→Cookieの値を取得できる

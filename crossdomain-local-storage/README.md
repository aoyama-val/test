# クロスドメインでlocalStorageの値を取得する

- XHRは不要
- postMessageとiframeを使う

## 使い方

1. ブラウザで `provider/iframe.html` にアクセスする→localStorageにセットされる
2. `user/index.html` にアクセスする→postMessageでlocalStorageの値を取得できる

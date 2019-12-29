# Dockerイメージを指定
FROM alpine:3.10

# イメージにメタデータを付与
LABEL maintainer="Vincent Composieux <vincent.composieux@gmail.com>"

# Dockerイメージのインストール
RUN apk add --update --no-cache nginx

#
COPY nginx.conf /etc/nginx/
COPY symfony.conf /etc/nginx/conf.d/

#
RUN echo "upstream php-upstream { server php:9001; }" > /etc/nginx/conf.d/upstream.conf

#
RUN adduser -D -g '' -G www-data www-data

# docker run コマンドの実行時に、同時に実行される
CMD ["nginx"]

# コンテナが外部に公開するポート番号を開放（HTTP、HTTPS）
EXPOSE 80
EXPOSE 443

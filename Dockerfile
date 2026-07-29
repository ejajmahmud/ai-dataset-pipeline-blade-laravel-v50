# Production Container Specification for ai-dataset-pipeline-blade-laravel-v50
FROM alpine:3.19
RUN apk add --no-cache bash curl
WORKDIR /app
COPY . /app
EXPOSE 8080
CMD ["echo", "ai-dataset-pipeline-blade-laravel-v50 container environment ready."]

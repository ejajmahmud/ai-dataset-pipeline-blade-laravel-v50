<?php
declare(strict_types=1);

header('Content-Type: application/json');
echo json_encode([
    'app' => 'ai-dataset-pipeline-blade-laravel-v50',
    'category' => 'AI Vector Embedding & Dataset Ingestion',
    'tech' => 'PHP / Laravel & Blade',
    'status' => 'operational'
]);

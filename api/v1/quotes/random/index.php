<?php

$requestUri = $_SERVER['REQUEST_URI'];
$apiKey = $_GET['api_key'] ?? null;

// Cambia esta clave por la tuya
$validApiKey = "9c17b7d5a42d4e198be5fc934998adcf";

if ($apiKey !== $validApiKey) {
    http_response_code(401);
    echo json_encode(["error" => "API Key inválida"]);
    exit;
}

// Solo respondemos a /quotes/random
if (preg_match('#^/quotes/random$#', parse_url($requestUri, PHP_URL_PATH))) {

    $quotes = [
            [
                "quote" => "No cuentes los días, haz que los días cuenten.",
                "author" => "Muhammad Ali",
                "style" => ["startColor" => "#4D96FF", "endColor" => "#A6C8FF"]
            ],
            [
                "quote" => "La vida es lo que pasa mientras estás ocupado haciendo otros planes.",
                "author" => "John Lennon",
                "style" => ["startColor" => "#FFB4B4", "endColor" => "#FFE0E0"]
            ],
            [
                "quote" => "Cree que puedes y ya estás a mitad de camino.",
                "author" => "Theodore Roosevelt",
                "style" => ["startColor" => "#FFD36E", "endColor" => "#FFF2D8"]
            ],
            [
                "quote" => "La creatividad es simplemente conectar cosas.",
                "author" => "Steve Jobs",
                "style" => ["startColor" => "#B5F1CC", "endColor" => "#E0FFEF"]
            ],
            [
                "quote" => "Haz lo que puedas, con lo que tengas, donde estés.",
                "author" => "Theodore Roosevelt",
                "style" => ["startColor" => "#FFABAB", "endColor" => "#FFE3E3"]
            ],
            [
                "quote" => "El éxito no es la clave de la felicidad. La felicidad es la clave del éxito.",
                "author" => "Albert Schweitzer",
                "style" => ["startColor" => "#A1C6EA", "endColor" => "#D4E7F7"]
            ],
            [
                "quote" => "La mejor forma de empezar es dejar de hablar y comenzar a hacer.",
                "author" => "Walt Disney",
                "style" => ["startColor" => "#C8E4B2", "endColor" => "#EAF8D1"]
            ],
            [
                "quote" => "Sé tú mismo; todos los demás ya están ocupados.",
                "author" => "Oscar Wilde",
                "style" => ["startColor" => "#FFD6A5", "endColor" => "#FFF1E6"]
            ],
            [
                "quote" => "El único modo de hacer un gran trabajo es amar lo que haces.",
                "author" => "Steve Jobs",
                "style" => ["startColor" => "#B9FBC0", "endColor" => "#E3FBE3"]
            ],
            [
                "quote" => "Cambia tus pensamientos y cambiarás tu mundo.",
                "author" => "Norman Vincent Peale",
                "style" => ["startColor" => "#A0CED9", "endColor" => "#D6F0F5"]
            ],
            [
                "quote" => "Haz hoy lo que otros no quieren, haz mañana lo que otros no pueden.",
                "author" => "Jerry Rice",
                "style" => ["startColor" => "#FDC5F5", "endColor" => "#FFE5FA"]
            ],
            [
                "quote" => "El conocimiento habla, pero la sabiduría escucha.",
                "author" => "Jimi Hendrix",
                "style" => ["startColor" => "#E4BAD4", "endColor" => "#FBEAFC"]
            ],
            [
                "quote" => "El futuro pertenece a quienes creen en la belleza de sus sueños.",
                "author" => "Eleanor Roosevelt",
                "style" => ["startColor" => "#A2D2FF", "endColor" => "#E0F0FF"]
            ],
            [
                "quote" => "El tiempo es oro, aprovéchalo bien.",
                "author" => "Anónimo",
                "style" => ["startColor" => "#FDEFB2", "endColor" => "#FFF8DC"]
            ],
            [
                "quote" => "Nunca es tarde para ser lo que podrías haber sido.",
                "author" => "George Eliot",
                "style" => ["startColor" => "#F6D6AD", "endColor" => "#FFF0E6"]
            ],
            [
                "quote" => "No hay viento favorable para el que no sabe a dónde va.",
                "author" => "Séneca",
                "style" => ["startColor" => "#B5EAEA", "endColor" => "#E0FFFF"]
            ],
            [
                "quote" => "Haz de tu vida un sueño, y de tu sueño una realidad.",
                "author" => "Antoine de Saint-Exupéry",
                "style" => ["startColor" => "#E7C6FF", "endColor" => "#F3E8FF"]
            ],
            [
                "quote" => "Quien tiene un porqué para vivir, puede soportar casi cualquier cómo.",
                "author" => "Friedrich Nietzsche",
                "style" => ["startColor" => "#FFC6FF", "endColor" => "#FFF0FA"]
            ],
            [
                "quote" => "Si puedes soñarlo, puedes lograrlo.",
                "author" => "Zig Ziglar",
                "style" => ["startColor" => "#B2EBF2", "endColor" => "#E0F7FA"]
            ],
            [
                "quote" => "El secreto de salir adelante es comenzar.",
                "author" => "Mark Twain",
                "style" => ["startColor" => "#D0F4DE", "endColor" => "#E8FBEF"]
            ],
            [
                "quote" => "Vive como si fueras a morir mañana. Aprende como si fueras a vivir siempre.",
                "author" => "Mahatma Gandhi",
                "style" => ["startColor" => "#C3F584", "endColor" => "#F1FFD8"]
            ],
            [
                "quote" => "Aprender nunca agota la mente.",
                "author" => "Leonardo da Vinci",
                "style" => ["startColor" => "#FFE7A0", "endColor" => "#FFF7D1"]
            ],
            [
                "quote" => "El único límite a nuestros logros es nuestra imaginación.",
                "author" => "Anónimo",
                "style" => ["startColor" => "#D5AAFF", "endColor" => "#F0E2FF"]
            ],
            [
                "quote" => "Lo único imposible es aquello que no intentas.",
                "author" => "Anónimo",
                "style" => ["startColor" => "#F8AFA6", "endColor" => "#FFE8E5"]
            ],
            [
                "quote" => "Sigue tus sueños, ellos saben el camino.",
                "author" => "Kobe Yamada",
                "style" => ["startColor" => "#C9E4DE", "endColor" => "#EDF7F4"]
            ],
            [
                "quote" => "El que no arriesga no gana.",
                "author" => "Proverbio popular",
                "style" => ["startColor" => "#FFD6A5", "endColor" => "#FFF1DE"]
            ],
            [
                "quote" => "La motivación te impulsa, el hábito te mantiene.",
                "author" => "Jim Ryun",
                "style" => ["startColor" => "#ACE7FF", "endColor" => "#DEF7FF"]
            ],
            [
                "quote" => "Hazlo con pasión o no lo hagas.",
                "author" => "Rosa Nouchette Carey",
                "style" => ["startColor" => "#FFC8DD", "endColor" => "#FFE9F2"]
            ],
            [
                "quote" => "Cambia el mundo siendo tú mismo.",
                "author" => "Amy Poehler",
                "style" => ["startColor" => "#B8E0D2", "endColor" => "#E7F7F1"]
            ],
            [
                "quote" => "Tu tiempo es limitado, no lo desperdicies viviendo la vida de alguien más.",
                "author" => "Steve Jobs",
                "style" => ["startColor" => "#FFBCBC", "endColor" => "#FFEAEA"]
            ],
        ];


    header('Content-Type: application/json');
    echo json_encode($quotes[array_rand($quotes)]);
    exit;
}

http_response_code(404);
echo json_encode(["error" => "Ruta no encontrada"]);

const API_KEY = '9c17b7d5a42d4e198be5fc934998adcf';

const quotes = [
  { quote: "No cuentes los días, haz que los días cuenten.", author: "Muhammad Ali", style: { startColor: "#4D96FF", endColor: "#A7C7FF" } },
  { quote: "La vida es un 10% lo que me ocurre y 90% cómo reacciono a ello.", author: "Charles R. Swindoll", style: { startColor: "#FF6F91", endColor: "#FFB3B3" } },
  { quote: "El éxito no es la clave de la felicidad. La felicidad es la clave del éxito.", author: "Albert Schweitzer", style: { startColor: "#6BCB77", endColor: "#B6E3B6" } },
  { quote: "Haz de tu vida un sueño, y de tu sueño una realidad.", author: "Antoine de Saint-Exupéry", style: { startColor: "#FFD3B6", endColor: "#FFE4C4" } },
  { quote: "Lo que no te mata te hace más fuerte.", author: "Friedrich Nietzsche", style: { startColor: "#FFAAA5", endColor: "#FFCDD2" } },
  { quote: "La felicidad no es algo hecho. Viene de tus propias acciones.", author: "Dalai Lama", style: { startColor: "#8EC5FC", endColor: "#E0C3FC" } },
  { quote: "El único modo de hacer un gran trabajo es amar lo que haces.", author: "Steve Jobs", style: { startColor: "#FFC3A0", endColor: "#FFAFBD" } },
  { quote: "La mejor forma de predecir el futuro es creándolo.", author: "Peter Drucker", style: { startColor: "#B2FEFA", endColor: "#0ED2F7" } },
  { quote: "No sueñes tu vida, vive tu sueño.", author: "Mark Twain", style: { startColor: "#FEE140", endColor: "#FA709A" } },
  { quote: "Cada día es una nueva oportunidad para cambiar tu vida.", author: "Desconocido", style: { startColor: "#89F7FE", endColor: "#66A6FF" } },
  { quote: "La perseverancia es la clave del éxito.", author: "Napoleón Hill", style: { startColor: "#C1FBA4", endColor: "#76D872" } },
  { quote: "No hay camino para la paz, la paz es el camino.", author: "Mahatma Gandhi", style: { startColor: "#A1FFCE", endColor: "#FAFFD1" } },
  { quote: "La creatividad es inteligencia divirtiéndose.", author: "Albert Einstein", style: { startColor: "#FBC7A4", endColor: "#FCE38A" } },
  { quote: "Lo importante no es ganar, sino competir bien.", author: "Pierre de Coubertin", style: { startColor: "#FAD0C4", endColor: "#FFD1FF" } },
  { quote: "Haz lo que puedas, con lo que tengas, donde estés.", author: "Theodore Roosevelt", style: { startColor: "#FFDEE9", endColor: "#B5FFFC" } },
  { quote: "No te rindas, cada fracaso es una oportunidad para comenzar de nuevo.", author: "Henry Ford", style: { startColor: "#D9AFD9", endColor: "#97D9E1" } },
  { quote: "El cambio es la ley de la vida.", author: "John F. Kennedy", style: { startColor: "#89F7FE", endColor: "#66A6FF" } },
  { quote: "Sigue tu corazón pero lleva contigo tu cerebro.", author: "Alfred Adler", style: { startColor: "#FFC3A0", endColor: "#FFAFBD" } },
  { quote: "La motivación es lo que te pone en marcha.", author: "Zig Ziglar", style: { startColor: "#89F7FE", endColor: "#66A6FF" } },
  { quote: "Aprende a disfrutar el viaje y no solo la llegada.", author: "Desconocido", style: { startColor: "#B2FEFA", endColor: "#0ED2F7" } },
  { quote: "La actitud es una pequeña cosa que hace una gran diferencia.", author: "Winston Churchill", style: { startColor: "#FFD3B6", endColor: "#FFE4C4" } },
  { quote: "La mente es todo. Lo que piensas, en eso te conviertes.", author: "Buda", style: { startColor: "#FFAAA5", endColor: "#FFCDD2" } },
  { quote: "Vive como si fueras a morir mañana. Aprende como si fueras a vivir siempre.", author: "Mahatma Gandhi", style: { startColor: "#FEE140", endColor: "#FA709A" } },
  { quote: "No hay nada imposible, porque los sueños de ayer son las esperanzas de hoy.", author: "Robert H. Schuller", style: { startColor: "#A1FFCE", endColor: "#FAFFD1" } },
  { quote: "El fracaso es simplemente la oportunidad de comenzar de nuevo.", author: "Henry Ford", style: { startColor: "#C1FBA4", endColor: "#76D872" } },
  { quote: "La excelencia no es un acto, sino un hábito.", author: "Aristóteles", style: { startColor: "#FFDEE9", endColor: "#B5FFFC" } },
  { quote: "El secreto de la felicidad está en la libertad.", author: "Thucydides", style: { startColor: "#FBC7A4", endColor: "#FCE38A" } },
  { quote: "Un amigo es una persona con la que se puede pensar en voz alta.", author: "Ralph Waldo Emerson", style: { startColor: "#D9AFD9", endColor: "#97D9E1" } },
  { quote: "Nunca es demasiado tarde para ser lo que podrías haber sido.", author: "George Eliot", style: { startColor: "#FF6F91", endColor: "#FFB3B3" } },
  { quote: "Donde una puerta se cierra, otra se abre.", author: "Alexander Graham Bell", style: { startColor: "#B2FEFA", endColor: "#0ED2F7" } }
];

async function handleRequest(request) {
  const url = new URL(request.url);

  if (url.pathname !== '/quotes/random') {
    return new Response(JSON.stringify({ error: 'Not Found' }), {
      status: 404,
      headers: { 'Content-Type': 'application/json' }
    });
  }

  const apiKey = url.searchParams.get('api_key');
  if (!apiKey || apiKey !== API_KEY) {
    return new Response(JSON.stringify({ error: 'Invalid API key' }), {
      status: 403,
      headers: { 'Content-Type': 'application/json' }
    });
  }

  const randomIndex = Math.floor(Math.random() * quotes.length);
  const randomQuote = quotes[randomIndex];

  return new Response(JSON.stringify(randomQuote), {
    status: 200,
    headers: { 'Content-Type': 'application/json' }
  });
}

addEventListener('fetch', event => {
  event.respondWith(handleRequest(event.request));
});

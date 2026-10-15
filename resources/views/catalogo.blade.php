
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoundVault — Explorar música</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="app-layout">
        <aside class="sidebar">
            <a class="brand" href="/">
                <span class="brand-icon">♫</span>
                SoundVault<span class="brand-dot">.</span>
            </a>

            <p class="nav-label">MENÚ</p>
            <nav class="navigation">
                <a href="/" class="nav-link">
                    <span>⌂</span> Inicio
                </a>
                <a href="#catalogo" class="nav-link active">
                    <span>◫</span> Explorar
                </a>
                <a href="#biblioteca" class="nav-link">
                    <span>▤</span> Mi biblioteca
                </a>
                <a href="#favoritos" class="nav-link">
                    <span>♡</span> Favoritos
                </a>
            </nav>

            <div class="sidebar-bottom">
                <div class="mini-avatar">SV</div>
                <div>
                    <strong>Mi espacio</strong>
                    <small>Biblioteca personal</small>
                </div>
            </div>
        </aside>

        <main class="main-content" id="catalogo">
            <header class="topbar">
                <span class="breadcrumb">Tu espacio / <strong>Explorar</strong></span>
                <span class="status"><span></span> Tu música, a tu manera</span>
            </header>

            <section class="hero">
                <div class="hero-copy">
                    <span class="eyebrow">TU UNIVERSO MUSICAL</span>
                    <h1>Encuentra tu<br>próximo <span>sonido.</span></h1>
                    <p>Descubre álbumes, explora artistas y encuentra la banda sonora de cada momento.</p>
                </div>

                <div class="hero-art" aria-hidden="true">
                    <div class="orbit orbit-one"></div>
                    <div class="orbit orbit-two"></div>
                    <div class="hero-disc">♫</div>
                    <span class="hero-star star-one">✳</span>
                    <span class="hero-star star-two">✦</span>
                </div>
            </section>

            <section class="catalog-section">
                <div class="search-row">
                    <div class="search-box">
                        <span>⌕</span>
                        <input
                            type="search"
                            placeholder="Buscar álbumes o artistas..."
                            aria-label="Buscar álbumes o artistas"
                        >
                        <kbd>/</kbd>
                    </div>

                    <button class="filter-button" type="button">
                        ☷ <span>Filtros</span>
                    </button>
                </div>

                <div class="genre-list" aria-label="Géneros musicales">
                    <button class="genre active" type="button">Todos</button>
                    <button class="genre" type="button">Pop</button>
                    <button class="genre" type="button">Rock</button>
                    <button class="genre" type="button">Indie</button>
                    <button class="genre" type="button">Hip-hop</button>
                    <button class="genre" type="button">Electrónica</button>
                    <button class="genre" type="button">Jazz</button>
                </div>

                <div class="section-heading">
                    <div>
                        <span class="eyebrow">UNA SELECCIÓN PARA TI</span>
                        <h2>Álbumes destacados</h2>
                    </div>
                    <span class="album-count">01 ÁLBUM</span>
                </div>

                <!-- JavaScript generará las tarjetas dentro de este contenedor -->
                <div class="album-grid" id="album-grid">

                    <!-- Tarjeta de ejemplo: la conservamos como referencia -->
                    <article class="album-card">
                        <div class="cover cover-one">
                            <img
                                src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?auto=format&fit=crop&w=600&q=85"
                                alt="Luces de un concierto"
                            >
                            <span class="cover-tag">DESTACADO</span>
                            <button
                                class="play-button"
                                type="button"
                                aria-label="Reproducir Neon Skies"
                            >▶</button>
                        </div>

                        <div class="album-info">
                            <div>
                                <h3>Neon Skies</h3>
                                <p>Luna Vale</p>
                            </div>
                            <button
                                class="heart-button"
                                type="button"
                                aria-label="Añadir a favoritos"
                            >♡</button>
                        </div>

                        <span class="album-meta">2025 · Pop alternativo</span>
                    </article>

                </div>
            </section>

            <footer class="footer">
                <span>SoundVault<span class="brand-dot">.</span></span>
                <span>Hecho para escuchar sin prisa.</span>
            </footer>
        </main>
    </div>
</body>
</html>

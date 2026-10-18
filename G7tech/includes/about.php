<section id="about" class="section about-section reveal">
    <div class="container about-card">
        <div class="about-visual">
            <img src="<?= htmlspecialchars(!empty($portfolioProfile['profile_picture']) ? $portfolioProfile['profile_picture'] : 'assets/images/about-character.svg', ENT_QUOTES, 'UTF-8'); ?>" alt="Portfolio profile picture">
        </div>

        <div class="about-copy">
            <p class="section-kicker">ABOUT US</p>
            <h2>
                We are <?= htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8'); ?>,
                a creative team focused on turning ideas into memorable, impactful experiences.
            </h2>
            <p>
                <?= nl2br(htmlspecialchars($portfolioProfile['about_me'] ?? 'We are G7tech, a creative studio focused on turning ideas into playful, impactful digital experiences.', ENT_QUOTES, 'UTF-8')); ?>
            </p>
            <a href="about.php" class="btn btn-secondary inline-btn">Know More About Us <span aria-hidden="true">→</span></a>
        </div>
    </div>
</section>

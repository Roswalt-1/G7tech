<section id="skills" class="section skills-section reveal">
    <div class="container">
        <div class="section-heading single-line">
            <h2>LANGUAGES</h2>
        </div>

        <?php
        $languageItems = [
            ['name' => 'HTML', 'file' => 'code.html', 'mark' => '&lt;/&gt;', 'class' => 'html', 'url' => 'https://www.w3schools.com/html/default.asp'],
            ['name' => 'CSS', 'file' => 'code.css', 'mark' => '{ }', 'class' => 'css', 'url' => 'https://www.w3schools.com/css/default.asp'],
            ['name' => 'JS', 'file' => 'code.js', 'mark' => 'f{}', 'class' => 'javascript', 'url' => 'https://www.w3schools.com/js/default.asp'],
            ['name' => 'PHP', 'file' => 'code.php', 'mark' => '&lt;?&gt;', 'class' => 'php', 'url' => 'https://www.w3schools.com/php/default.asp'],
            ['name' => 'SQL', 'file' => 'code.sql', 'mark' => '', 'class' => 'sql', 'url' => 'https://www.w3schools.com/sql/default.asp'],
        ];
        ?>

        <div class="skills-row" aria-label="Programming languages">
            <?php foreach ($languageItems as $language): ?>
                <a class="skill-item language-<?= $language['class']; ?>" href="<?= htmlspecialchars($language['url'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer" aria-label="Open <?= htmlspecialchars($language['name'], ENT_QUOTES, 'UTF-8'); ?> learning resources">
                    <span class="language-label"><?= htmlspecialchars($language['name'], ENT_QUOTES, 'UTF-8'); ?></span>
                    <span class="language-file" aria-hidden="true">
                        <span class="language-file-name"><?= htmlspecialchars($language['file'], ENT_QUOTES, 'UTF-8'); ?></span>
                        <span class="language-file-fold"></span>
                        <?php if ($language['class'] === 'sql'): ?>
                            <i class="language-file-mark fa-solid fa-database"></i>
                        <?php else: ?>
                            <span class="language-file-mark"><?= $language['mark']; ?></span>
                        <?php endif; ?>
                    </span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

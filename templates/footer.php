<?php
    $socialNetworks = [
        'facebook' => [
            'href' => 'https://www.facebook.com',
            'title' => 'Facebook',
            'class' => 'bi-facebook'
        ],
        'instagram' => [
            'href' => 'https://www.instagram.com',
            'title' => 'Instagram',
            'class' => 'bi-instagram'
        ],
        'youtube' => [
            'href' => 'https://www.youtube.com',
            'title' => 'Youtube',
            'class' => 'bi-youtube'
        ],
        'tiktok' => [
            'href' => 'https://www.tiktok.com',
            'title' => 'Tiktok',
            'class' => 'bi-tiktok'
        ]
    ];
?>
<footer id="footer" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="content-block col">
                <h2>A propos</h2>
                <ul>
                    <li>
                        <a href="">
                            <span>Conditions générales d'utilisation</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span>Politique de confidentialité</span>
                        </a>
                    </li>
                    <li>
                        <a href="/legal-mentions.php">
                            <span>Mentions légales</span>
                        </a>
                    </li>
                    <li>
                        <a href="/faq.php">
                            <span>Foire aux questions</span>
                        </a>
                    </li>
                </ul>
            </div>   
            <div class="content-block social-block col">
                <h2>Réseaux sociaux</h2>
                <ul>
                    <?php foreach ($socialNetworks as $networkName => $networkData): ?>
                    <li>
                        <a href="<?php echo $networkData['href']; ?>" target="_blank" title="<?php echo $networkData['title']; ?>">
                            <span><i class="bi <?php echo $networkData['class']; ?>"></i></span>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="content-block col">
                <h2>Liens utiles</h2>
                <ul>
                    <li>
                        <a href="">
                            <span>Notre carte</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span>Où nous trouver</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span>Votre compte client</span>
                        </a>
                    </li> 
                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="/js/bootstrap/popper.min.js"></script>
<script src="/js/bootstrap/bootstrap.min.js"></script>
<script>
    const dropdownElementList = document.querySelectorAll('.dropdown-toggle')
    const dropdownList = [...dropdownElementList].map(dropdownToggleEl => new bootstrap.Dropdown(dropdownToggleEl))
</script>
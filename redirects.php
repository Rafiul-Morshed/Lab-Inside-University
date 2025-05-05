<?php
function redirectTo($url) {
    header("Location: $url");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action'])) {
    $actions = [
        // Main navigation
        'join_team' => "https://fablabiub.com/membership/",
        'explore_research' => "https://iub.ac.bd/research-and-innovation/research-at-iub",
        'about' => "https://iub.ac.bd/academics/institutes-centers-and-cells/center/specific/fablab",
        
        // Research areas
        'data_science' => "https://hdsr.mitpress.mit.edu/pub/d9j96ne4/release/3",
        'ai_research' => "https://sites.google.com/view/riotcenter/riot",
        'astro_research' => "https://cassa.site/about/",
        
        // Projects
        'self_healing' => "https://link.springer.com/article/10.1007/s12567-021-00365-5",
        'quantum_dot' => "https://www.ubiqd.com/solar",
        
        // Team profiles
        'mahady_profile' => "https://iub.ac.bd/directory/cse?type=departments",
        'robiul_profile' => "https://iub.ac.bd/directory/cse?type=departments",
        'sadia_profile' => "https://iub.ac.bd/directory/cse?type=departments",
        
        // Publications
        'pub1' => "https://ieeexplore.ieee.org/abstract/document/10197712",
        'pub2' => "https://ieeexplore.ieee.org/abstract/document/10544219",
        'all_publications' => "https://scholar.google.com/scholar?hl=en&as_sdt=0%2C5&q=mahady+hasan+iub&oq=Mahady+Hasan"
    ];

    if (array_key_exists($_GET['action'], $actions)) {
        redirectTo($actions[$_GET['action']]);
    }
}
?>
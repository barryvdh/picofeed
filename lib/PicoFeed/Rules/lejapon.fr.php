<?php
return array(
    'test_url' => 'http://lejapon.fr/guide-voyage-japon/5223/tokyo-sous-la-neige.htm',
    'body' => array(
        '//div[@class="entry"]'
    ),
    'strip' => array(
        '//script',
        '//*[contains(@class, "addthis_toolbox")]',
        '//*[contains(@class, "addthis_default_style")]',
        '//*[@class="navigation small"]',
        '//*[@id="related"]',
    )
);

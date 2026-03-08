<?php
$instance['AG_GAMES'] = array_merge($instance['AG_GAMES'], array(
    "loadder" => array(
        "minecraft_version" => "1.20.1",
        "loadder_type" => "forge",
        "loadder_version" => "latest"
    ),
    "verify" => true,
    "ignored" => array(
        'config',
        'logs',
        'screenshots',
        'options.txt',
        'optionsof.txt'
    ),
    "whitelist" => array(),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "AG GAMES",
        "ip" => "172.96.140.50",
        "port" => 25588
    )
));
$instance['panas_saga'] = array_merge($instance['panas_saga'], array(
    "loadder" => array(
        "minecraft_version" => "1.20.1",
        "loadder_type" => "forge",
        "loadder_version" => "latest"
    ),
    "verify" => true,
    "ignored" => array(
        'config',
        'logs',
        'screenshots',
        'options.txt',
        'optionsof.txt'
    ),
    "whitelist" => array(
        'Snaider24YT',
        'Sebas_owo1'
    ),
    "whitelistActive" => true,
    "status" => array(
        "nameServer" => "PANAS SAGA",
        "ip" => "panassaga.hidenmc.com",
        "port" => 24642
    )
));
?>
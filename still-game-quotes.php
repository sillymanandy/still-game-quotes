<?php
/*
Plugin Name: Still Game Quotes
Plugin URI: https://github.com/sillymanandy/still-game-quotes
Description: Shows a random quote from Still Game in the WordPress admin area.
Version: 1.0.0
Author: Andy Dehaney-Steven
Author URI: https://github.com/sillymanandy/still-game-quotes
Text Domain: still-game-quotes
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

// 1) Return a random quote
function sgq_get_random_quote() {
    // Put your quotes here – one per line.
    $quotes = array(
        "Is it? Is it though, Victor?",
        "Twa pints, Prick",
        "Boabby, you walloper!",
        "He who hingeth abbot, getteth hee-haw",
        "People huv tea know",
        "Tak that, tadger",
        "Hurdy gurdy gurdy, in the windae boaxes",
        "Get it up ye!",
        "That's plenty!",
        "He's a bawbag, so he is.",
        "I'll gie ye a doing!",
        "Ah'm away tae ma bed — Ah've had enough o' this pish.",
        "Yer aff yer nut, you!",
        "Whit are ye like?",
        "Wind yer neck in!",
        "Jack, I'm no wantin' tae talk tae you till ah've had ma tea.",
        "Nae danger!",
        "That's you, ya big tube.",
        "Get that doon ye!",
        "You've goat a face like a skelpit erse.",
        "Whit a riot that wis!",
        "Ach, behave yersel!",
        "Isa, haud yer wheesht!",
        "Are ye havin' a laugh?",
        "Ah'm burstin' for a pint.",
        "That's the spirit, son!",
        "Yer talkin' mince!",
        "Jack, gie's peace.",
        "Nae chance, pal.",
        "Get oot ma road!",
        "Look at the state o' you!",
        "Away an' bile yer heid.",
        "Ah'm no listenin' tae this.",
        "That’s pure shite an’ you know it.",
        "You'll huv had yer tea?",
        "Ah'll tan yer coupon!",
        "Whit in the name o’ the wee man?",
        "Tam! You tight-fisted wee nyaff!",
        "Yer a right pair o’ wallopers.",
        "Keep the heid, Winston.",
        "Is that you, aye?",
        "That's a stoater!",
        "You couldnae run a bath!",
        "That'll be right!",
        "Hawd oan, that's ma seat.",
        "Yer arse is oot the windae.",
        "Meena, you're like a broken tannoy — constant noise and nae useful information!",
        "Ach, Meena, if moaning was an Olympic sport you'd be bringin' hame the gold.",
        "Meena! You're givin' me a migraine in stereo!",
        "Honestly, woman, you could find fault wi' sunshine.",
        "Meena, please! You're like a coupon that's been through the tumble dryer.",
        "You're an affliction, Meena — a beautiful one, but an affliction nonetheless!",
        "Meena, if you nag any harder the walls'll start complainin'.",
        "By the beard o’ Buddha, Meena, you're still talkin'?",
        "Meena! You're like a telemarketer that cannae be hung up on!",
        "If you keep this up, Meena, I'll need hazard pay!",
        "I am the prince of pish",
        "When the prince is finishe pishing, can the Duke tak a dump?",
        "Here he comes — Stevie the Bookie, tighter than a duck's backside!",
        "Stevie, you'd charge interest on fresh air if you could.",
        "That man widnae gie ye the steam aff his ain pish.",
        "Stevie, you've got a face that could stop a fruit machine payin' oot.",
        "He's no a bookie — he's a professional disappointment.",
        "Stevie the Bookie — always takin', never payin'.",
        "Careful, lads — he's lookin' at you like a bad debt.",
        "Stevie, you're about as welcome as a coupon wi' a hole in it.",
        "That's Stevie — the only man who can make winning feel like losing.",
        "If Stevie smiles, check your pockets.",
        "Stevie the Bookie, makin' misery a full-time occupation.",
        "Don't gie him ideas — he'll put a price on oxygen next.",
        "Let me in, for I am a bogus gas man come tae ransack yer hoose",
        "Stevie the bookie, wanted deid or deid"
    );

    // Pick a random one
    return $quotes[ array_rand( $quotes ) ];
}

// 2) Output the quote in the admin header
function sgq_admin_quote() {
    $quote = sgq_get_random_quote();

    echo '<p id="sgq-quote">' . esc_html( $quote ) . '</p>';
}
add_action( 'admin_notices', 'sgq_admin_quote' );

// 3) Add a bit of CSS to position it (like Hello Dolly does)
function sgq_admin_css() {
    echo '
    <style type="text/css">
        #sgq-quote {
            float: right;
            padding: 5px 10px 0;
            margin: 0;
            font-size: 12px;
            color: #666;
        }
    </style>';
}
add_action( 'admin_head', 'sgq_admin_css' );

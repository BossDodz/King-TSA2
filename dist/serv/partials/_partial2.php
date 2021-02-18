<?php
$data = array(
    (0) => array(
        'img' => 'https://cdn2.stylecraze.com/wp-content/uploads/2013/04/Can-Eating-An-Apple-A-Day-Keep-The-Doctor-Away.jpg',
        'name' => 'Apple',
        'desc' => 'Color Red',
        'fact' => array(
            "World's top apple producers are China, United States, Turkey, Poland and Italy.",
            "Apples are the second most valuable fruit grown in the United States. Oranges are first.",
            "The old saying, \"An apple a day, keeps the doctor away.\" This saying comes from an old English adage, \"To eat an apple before going to bed, will make the doctor beg his bread.\""
        )
    ),
    (1) => array(
        'img' => 'https://images.immediate.co.uk/production/volatile/sites/30/2017/01/Bananas-218094b-scaled.jpg?quality=90&resize=960%2C872',
        'name' => 'banana',
        'desc' => 'Color Yellow',
        'fact' => array(
            "Bananas float in water because they are less dense in comparison.",
            "Bananas may be considered a mood enhancer because it contains the amino acid, tryptophan and Vitamin B6 that helps the body produce serotonin.",
            "Humans share about 50% of our DNA with bananas."
        )
    ),
    (2) => array(
        'img' => 'https://images.fineartamerica.com/images/artworkimages/mediumlarge/1/september-grapes-square-georgia-fowler.jpg',
        'name' => 'grapes',
        'desc' => 'Color Purple',
        'fact' => array(
            "World's top apple producers are China, United States, Turkey, Poland and Italy.",
            "Apples are the second most valuable fruit grown in the United States. Oranges are first.",
            "Spanish explorers introduced the fruit to America about 300 years ago."
        )
    ),
    (3) => array(
        'img' => 'https://www.vegkitchen.com/wp-content/uploads/2017/03/shutterstock_262931192.jpg',
        'name' => 'dragonfruit',
        'desc' => 'Color Pink/Red and White',
        'fact' => array(
            "Dragon fruit grows on a cactus that blooms for one night per fruit cycle.",
            "Dragon fruit is a tropical fruit that is native to Mexico and Central America. The taste is like a combination of a kiwi and a pear.",
            "Dragon fruit is also known as strawberry pear or pity."
        )
    ),
    (4) => array(
        'img' => 'https://keralaspecial.in/wp-content/uploads/2020/04/WhatsApp-Image-2020-04-26-at-11.00.17-AM.jpeg',
        'name' => 'kiwi',
        'desc' => 'Color Brown and Green',
        'fact' => array(
            "This fruit was initially known as \"Chinese Gooseberry\". New Zealanders renamed it into \"kiwifruit\" due to similarities in appearance with kiwi bird",
            "Kiwifruit grows as vine. It can reach the size of 33 feet in length. Domesticated varieties of kiwifruit require seasonal pruning.",
            "The old saying, \"An apple a day, keeps the doctor away.\" This saying comes from an old English adage, \"To eat an apple before going to bed, will make the doctor beg his bread.\""
        )
    ),
    (5) => array(
        'img' => 'https://upload.wikimedia.org/wikipedia/commons/4/43/Ambersweet_oranges.jpg',
        'name' => 'orange',
        'desc' => 'Color Orange',
        'fact' => array(
            "Oranges are the largest citrus fruit in the world.",
            "Brazil is the world leader in orange production, producing about half of the world’s orange juice and approximately 80% of the world’s orange concentrate.",
            "With a high resistance to disease, more oranges are killed by lightning than by plant diseases."
        )
    ),
    (6) => array(
        'img' => 'https://images.unsplash.com/photo-1589606743932-747c74e7330e?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1000&q=80',
        'name' => 'pineapple',
        'desc' => 'Color Yellow',
        'fact' => array(
            "Pineapples regenerate! You can plant pineapple leaves to grow a new plant.",
            "Hawaii produces about 1/3 of all pineapples in the world.",
            "Pineapples contain the bromelain enzyme which can break down proteins, so you can use them to tenderize meat."
        )
    ),
    (7) => array(
        'img' => 'https://static.independent.co.uk/s3fs-public/thumbnails/image/2020/05/20/19/istock-1143163513.jpg?width=1200',
        'name' => 'strawberry',
        'desc' => 'Color Red',
        'fact' => array(
            "Technically berries have seeds on the inside and they don’t come from a single ovary, so strawberries are really in a group all their own.",
            "The average strawberry has 200 seeds.",
            "The flavor is influenced by weather, variety, and ripeness when harvested."
        )
    ),
    (8) => array(
        'img' => 'https://ph-test-11.slatic.net/p/df798b83cae00298abfd2137a41d37e9.jpg',
        'name' => 'cherry',
        'desc' => 'Color Dark Red',
        'fact' => array(
            "Pineapples regenerate! You can plant pineapple leaves to grow a new plant.",
            "Sweet cherries are mostly grown in California, Washington and Oregon, and tart cherries are mostly grown in Michigan and Wisconsin.",
            "Cherries are jam-packed with antioxidants, vitamins and minerals that are good for your health. To sweeten the deal, they’re low in calories, too! Pack some in your lunch bag for a guilt-free snack."
        )
    ),
    (9) => array(
        'img' => 'https://cdn.shopify.com/s/files/1/0993/1324/products/CopyofIGElderberry_1_1024x1024.png?v=1606698263',
        'name' => 'elderberry',
        'desc' => 'Color Dark Purple',
        'fact' => array(
            "One plant can survive between 80 to 100 years in the wild.",
            "The raw berries, bark, and leaves are poisonous and can cause stomach problems.",
            "Elderflowers can be eaten and are usually in syrups, juices, and teas"
        )
    ),

);

function populate()
{
    global $data;
    $name = array_column($data, 'name');
    array_multisort($name, SORT_ASC, $data);

    echo "<tr>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Facts</th>
        </tr>
    
    ";
    foreach ($data as $key => $column) {
        echo "<tr>";
        $img = false;
        foreach ($column as $columns => $value) {
            if (!$img) {
                echo "<td><img src=" . $value . "></td>";
                $img = true;
            } else if ($columns === 'fact') {
                echo "<td><ul>";
                foreach ($value as $facts) {
                    echo "<li>" . ucfirst($facts) . "</li> ";
                }
                echo "</td></ul>";
            } else {
                echo "<td>" . ucfirst($value) . "</td>";
            }
        }
        echo "</tr>";
    }
}

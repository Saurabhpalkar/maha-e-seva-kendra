<!DOCTYPE html>
<html>
<head>
    <style>
        .blueprint {
            font-family: monospace;
            font-size: 20px;
            line-height: 1;
            display: inline-block;
            background-color: #f0f0f0;
            padding: 10px;
            border: 1px solid #ccc;
        }

        .wall {
            color: #333;
        }

        .floor {
            color: #999;
        }

        .bedroom {
            color: #007bff;
        }

        .door {
            color: #e74c3c;
        }

        .window {
            color: #f39c12;
        }
    </style>
</head>
<body>
    <?php
    function create_home_blueprint() {
        // Define the dimensions of the home
        $width = 10; // in meters
        $length = 12; // in meters

        // Create the blueprint using text symbols
        $blueprint = array_fill(0, $length, array_fill(0, $width, '-'));
        
        // ... (rest of the code remains the same)
        
        // Print the blueprint with HTML/CSS styling
        echo '<div class="blueprint">';
        for ($i = 0; $i < $length; $i++) {
            for ($j = 0; $j < $width; $j++) {
                $symbol = $blueprint[$i][$j];
                switch ($symbol) {
                    case '|':
                        echo '<span class="wall">|</span>';
                        break;
                    case '-':
                        echo '<span class="floor">-</span>';
                        break;
                    case 'B':
                        echo '<span class="bedroom">B</span>';
                        break;
                    case 'D':
                        echo '<span class="door">D</span>';
                        break;
                    case 'W':
                        echo '<span class="window">W</span>';
                        break;
                    default:
                        echo $symbol;
                }
            }
            echo '<br>';
        }
        echo '</div>';
    }

    // Call the function to create the 2 BHK home blueprint
    create_home_blueprint();
    ?>
</body>
</html>

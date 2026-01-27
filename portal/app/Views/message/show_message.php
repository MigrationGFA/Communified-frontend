<?php
    $mysession = session()->get('email');
    $count = count($data);
    for($i = 0; $i < $count; $i++){
        if($data[$i]['Message'] !== ''){


        if($data[$i]['SenderEmail'] == $mysession){
        ?>
            <div class="chat">
                <div class="chat-body">
                <div class="chat-content">
                    <p><?php echo $data[$i]['Message']; ?></p>
                </div>
                </div>
            </div>
        <?php
        } else {
        ?>
            <div class="chat chat-left">
                <div class="chat-body">
                <div class="chat-content">
                    <p><?php echo $data[$i]['Message']; ?></p>
                </div>
                </div>
            </div>
        <?php
        }
    }
    }
?>
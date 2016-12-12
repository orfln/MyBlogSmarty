    
        <div class="content">
            <p>
                {foreach from=$result item=row}
                {$row["ID"]} <br/> {$row["DATE"]} <br/> {$row["CONTENT"]}<br/>          
                <br/>
                {/foreach}
                <br/>
                <a href="index.php?controller=index&action=addcommentform&id={$row['ID']}" class="output"> 
                    Додати коментар </a> <br/>
            </p>

            <p>
                {foreach from=$result_comments item=row}
                {$row["NAME"]} <br/> {$row["DATE"]} <br/> {$row["CONTENT"]}<br/>                
                <br/>
                {/foreach}
                <br/>
            </p>
        </div>
    


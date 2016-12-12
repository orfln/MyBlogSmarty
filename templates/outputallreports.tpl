    
        <div class="content">
            <p>
                {foreach from=$result1 item=row}
                    Report ID: {$row["ID"]} <br>
                    {$row["DATE"]} <br> 
                    <div class="reportcontent">
                        {$row["CONTENT"]}<br>
                    </div>
                    <a href="index.php?controller=index&action=showselectedreport&id={$row['ID']}" class="output">
                    {$row["COMNUM"]} коментарів</a> <br>
                    <br>
                {/foreach}
                    
                {foreach from=$result2 item=row}
                    Report ID: {$row["ID"]} <br/>
                    {$row["DATE"]} <br> 
                    <div class="reportcontent">
                        {$row["CONTENT"]}<br>
                    </div>
                    <a href="index.php?controller=index&action=showselectedreport&id={$row['ID']}" class="output">
                    {$row["COMNUM"]} коментарів</a> <br>
                    <br>
                {/foreach}
                    
                <br>
            </p>
        </div>
    

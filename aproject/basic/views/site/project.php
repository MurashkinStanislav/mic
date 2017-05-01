<h1>Проект</h1>
<ul>
    <?php foreach( $project as $project) {?>
        <li><?=$project->id?>:
            <?=$project->Direction?>:
            <?=$project->Project?>:
            <?=$project->Leader?>:
            <?=$project->ChiefDesiner?>:
            <?=$project->AssistantCD?>:
            <?=$project->Contract?>:
            <?=$project->Customer?>:
            <?=$project->close?>:
            <?=$project->reported?>:
            <?=$project->note?>:
            </li>
    <?php } ?>
</ul>
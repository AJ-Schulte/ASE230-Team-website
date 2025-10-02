<?php

function displayExperience($experience){
    ?>
    <div class="resume-timeline-item-header mb-2">
        <div class="d-flex flex-column flex-md-row">
            <h3 class="resume-position-title font-weight-bold mb-1"><?= $experience['positionName'] ?></h3>
            <div class="resume-company-name ms-auto"><?= $experience['companyName'] ?></div>
        </div>
        <div class="resume-position-time"><?= $experience['time'] ?></div>
    </div>
    <div class="resume-timeline-item-desc">
        <p><?= $experience['role-description'] ?></p>
        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
        <ul class="list-inline">
            <?php foreach ($experience['techUsed'] as $tech): ?>
                <?php if (!empty($tech)) : ?>
                <li class="list-inline-item">
                    <span class="badge bg-secondary badge-pill"><?= $tech ?></span>
                </li>
                <?php endif ?>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php
}

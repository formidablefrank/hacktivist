<section id="dashpage">
    <div class="ui centered grid container">
        <div class="fourteen wide mobile only column">
            <div class="ui fluid card">
                <div class="content">
                    <div class="left floated mini ui square image">
                        <img src="<?php echo base_url('img/forever.png') ?>" alt="">
                    </div>
                    <div class="header">Eco-friendly</div>
                    <div class="meta">Organization</div>
                    <div class="description">
                        <div class="ui label">
                            <strong><i class="star icon"></i> Marine</strong>
                            Conservation
                        </div>
                        <br/>
                        <div class="ui label">
                            <strong><i class="certificate icon"></i> 5000</strong> tokens
                            gave
                        </div>
                    </div>
                </div>
                <div class="extra content">
                    <a href="<?php echo base_url('create')?>" class="ui button">Create Event</a>
                </div>
            </div>
        </div>
        <div class="four wide tablet four wide computer only column">
            <div class="ui card">
                <div class="ui square image">
                    <img src="<?php echo base_url('img/forever.png') ?>" alt="">
                </div>
                <div class="content">
                    <div class="header">Eco-friendly</div>
                    <div class="meta">Organization</div>
                    <div class="description">
                        <div class="ui label">
                            <strong><i class="star icon"></i> Marine</strong>
                            Conservation
                        </div>
                        <div class="ui label">
                            <strong><i class="certificate icon"></i> 5000</strong> tokens
                            gave
                        </div>
                    </div>
                </div>
                <div class="extra content">
                    <div class="extra content">
                        <a href="<?php echo base_url('create')?>" class="ui button">Create Event</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="fourteen wide mobile ten wide tablet ten wide computer column">
            <!--Featured Events-->
        <!--Past Events-->
            <div class="ui segment">
                <div class="ui green ribbon label">Your Upcoming Events</div>
                <div class="ui divided items">
                    <?php foreach ($userevents as $event) { if($event->status_id == 2){ ?>
                    <div class="item">
                        <div class="image">
                            <img src="<?php echo $event->event_pic ?>" alt="Image">
                        </div>
                        <div class="content">
                            <a href="<?php echo base_url('event/'.$event->event_id) ?>" class="header">
                                <?php echo $event->event_name; ?>
                            </a>
                            <div class="meta"><?php echo $event->ngo_name; ?></div>
                            <div class="description">
                                <p><?php echo $event->event_details; ?></p>
                                <p>
                                    <?php echo date('M d, D H:i a', strtotime($event->event_start)); ?>
                                    - <?php echo date('M d, D H:i a', strtotime($event->event_end));?>
                                </p>
                            </div>
                            <div class="extra">
                                <div class="ui label">
                                    <?php echo $event->event_limit; ?>
                                    <strong>people registered</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>
                </div>
            </div>
            <!--Recent Past Events-->
            <div class="ui segment">
                <div class="ui green ribbon label">Past Events</div>
                <div class="ui divided items">
                    <?php foreach ($userevents as $event) { if($event->status_id == 3){?>
                    <div class="item">
                        <div class="image">
                            <img src="<?php echo $event->event_pic ?>" alt="Image">
                        </div>
                        <div class="content">
                            <a href="<?php echo base_url('event/'.$event->event_id) ?>" class="header">
                                <?php echo $event->event_name; ?>
                            </a>
                            <div class="meta"><?php echo $event->ngo_name; ?></div>
                            <div class="description">
                                <p><?php echo $event->event_details; ?></p>
                                <p>
                                    <?php echo date('M d, D H:i a', strtotime($event->event_start)); ?>
                                    - <?php echo date('M d, D H:i a', strtotime($event->event_end));?>
                                </p>
                            </div>
                            <div class="extra">
                                <div class="ui label">
                                    <?php echo $event->event_limit; ?>
                                    <strong>people registered</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>
                </div>
            </div>

        </div>
    </div>
</section>

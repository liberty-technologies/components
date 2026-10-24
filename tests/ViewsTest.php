<?php

it('compiles every component view', function () {
    $this->artisan('view:cache')->assertSuccessful();

    $this->artisan('view:clear');
});

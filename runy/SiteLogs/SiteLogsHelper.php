<?php

use SiteLogs\Models\SiteLogs;

function log_rep() {
    return SiteLogs::all();
}

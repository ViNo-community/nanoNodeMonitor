<?php

// the project version
const PROJECT_VERSION = '1.8.0';

// project URL
const PROJECT_URL = 'https://github.com/ViNo-community/nanoNodeMonitor';

// URL to get version of latest release from github
const GITHUB_LATEST_API_URL = 'https://api.github.com/repos/ViNo-community/nanoNodeMonitor/releases/latest';

// nano rep account for Nano Node Monitor 
const NODEMON_REP_ACCOUNT = 'nano_1sw898hgeexgrsq8x16wdadwdrs3obn418z6x98parb5tymz879mu89qndju';

// banano rep account for Nano Node Monitor 
const NODEMON_BAN_REP_ACCOUNT = 'ban_1sw898hgeexgrsq8x16wdadwdrs3obn418z6x98parb5tymz879mu89qndju';

// nano donation account for Nano Node Monitor development
const NODEMON_DON_ACCOUNT = 'nano_1so76dzauddjs3dr39hc5h1tn5o8ohgk4uqtkspj5okf6fdfs7mthi1oym4e';

// baano donation account for Nano Node Monitor development
const NODEMON_BAN_DON_ACCOUNT = 'ban_1so76dzauddjs3dr39hc5h1tn5o8ohgk4uqtkspj5okf6fdfs7mthi1oym4e';

// total number of characters for displaying Nano addresses including ellipsis
const NANO_ADDR_NUM_CHAR = 17;

// curl timeout in seconds to receive data from external services (max delay is EXTERNAL_TIMEOUT + EXTERNAL_CONECTTIMEOUT)
const EXTERNAL_TIMEOUT = 3;

// curl timeout in seconds to connect to external services (max delay is EXTERNAL_TIMEOUT + EXTERNAL_CONECTTIMEOUT)
const EXTERNAL_CONECTTIMEOUT = 2;

// maximum allowed age of data to be part of the block confirmation time percentiles calculation (milliseconds)
const CONFIRMATION_TIME_LIMIT = 600000;

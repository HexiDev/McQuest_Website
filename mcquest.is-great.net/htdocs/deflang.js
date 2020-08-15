var defaultLang = ((navigator.language || navigator.userLanguage).split('-')[0]);
    if (defaultLang == 'nl')
    {
        window.location.replace("nl/index.php");
    } 
    else
    {
        window.location.replace("en/index.php");
    }

window.addEventListener('load', (e) => {
  const html = document.querySelector('html'),
        userAgent = navigator.userAgent,
        body = document.querySelector('body');
  let classBrowser = null,
      classOS = null;

  function getBrowser() {
    let browser = null;

    if((navigator.userAgent.indexOf("Opera") || navigator.userAgent.indexOf('OPR')) !== -1 ) {
      browser = 'is-opera';
    }
    else if(navigator.userAgent.indexOf("Edge") >= 0 ){
      browser = 'is-edge';
    }
    else if(navigator.userAgent.indexOf("Chrome") !== -1 ) {
      browser = 'is-chrome';
    }
    else if(navigator.userAgent.indexOf("Safari") !== -1) {
      browser = 'is-safari';
    }
    else if(navigator.userAgent.indexOf("Firefox") !== -1 ) {
      browser = 'is-firefox';
    }
    else if((navigator.userAgent.indexOf("MSIE") !== -1 ) || (!!document.documentMode === true )) {
      browser = 'is-ie';
    }

    return browser;
  }

  function getOS() {
    const platform = window.navigator.platform,
          macosPlatforms = ['Macintosh', 'MacIntel', 'MacPPC', 'Mac68K'],
          windowsPlatforms = ['Win32', 'Win64', 'Windows', 'WinCE'],
          iosPlatforms = ['iPhone', 'iPad', 'iPod'];
    let os = null;

    if (macosPlatforms.indexOf(platform) !== -1) {
      os = 'is-mac';
    } else if (iosPlatforms.indexOf(platform) !== -1) {
      os = 'is-ios';
    } else if (windowsPlatforms.indexOf(platform) !== -1) {
      os = 'is-windows';
    } else if (/Android/.test(userAgent)) {
      os = 'is-android';
    } else if (!os && /Linux/.test(platform)) {
      os = 'is-linux';
    }

    return os;
  }

  classOS = getOS();
  classBrowser = getBrowser();
  
  html.classList.add(classBrowser, classOS);


  let isIpad = navigator.userAgent.match(/iPad/i) !== null;
  if(isIpad) {
    html.classList.add('is-ipad');   
    body.classList.add('is-ipad');   
  }

})
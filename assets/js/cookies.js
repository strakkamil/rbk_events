export function initCookies() {
  const cookiesWrapper = document.querySelector('.cookies-wrapper')
  const btnOpen = document.querySelector('footer button.cookies-open')
  const mediaVideoOpen = document.querySelector('.video-cookies-info .show-cookie-banner')
  const btnSave = cookiesWrapper.querySelector('.cookies-agree button.save')
  const btnReject = cookiesWrapper.querySelector('.cookies-agree button.reject')
  const cookieMarketing = cookiesWrapper.querySelector('input#marketing')
  const cookieStatistic = cookiesWrapper.querySelector('input#statistic')
  const videoCookieBanner = document.querySelector('.video-cookies-info')
  const playBtns = [...document.querySelectorAll('.media-gallery.video .page .element-wrapper button')]

  function hideBanner () {
    cookiesWrapper.classList.remove('show')
  }

  function rejectAll () {
    cookieMarketing.checked = false
    cookieStatistic.checked = false
    const marketingValue = cookieMarketing.checked
    const statisticValue = cookieStatistic.checked
    saveData(marketingValue, statisticValue)
    hideBanner()
  }

  function showBanner () {
    cookiesWrapper.classList.add('show')
  }

  function saveData (marketingValue, statisticValue) {
    document.cookie = `marketing_consent=${marketingValue}; max-age=15552000; path=/`;
    document.cookie = `statistic_consent=${statisticValue}; max-age=15552000; path=/`;
    updateCookiesVideoInfo(marketingValue)
  }

  function save () { 
    const marketingValue = cookieMarketing.checked
    const statisticValue = cookieStatistic.checked
    saveData(marketingValue, statisticValue)
    hideBanner()
  }

  function updateCookiesVideoInfo (marketingValue) {
    if(!videoCookieBanner) return
    if(marketingValue) {
      videoCookieBanner.classList.remove('show')
      for(let btn of playBtns) {
        btn.classList.add('show')
      }
    } else {
      videoCookieBanner.classList.add('show')
      for(let btn of playBtns) {
        btn.classList.remove('show')
      }
    }
  }

  btnOpen.addEventListener("click", showBanner)
  if(mediaVideoOpen){
    mediaVideoOpen.addEventListener("click", showBanner)
  }
  btnSave.addEventListener("click", save)
  btnReject.addEventListener("click", rejectAll)
}
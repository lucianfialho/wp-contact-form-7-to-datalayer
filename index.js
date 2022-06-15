import dataLayer from './dataLayer';


window.onload = () => {
    if(!window['google_tag_manager']) {
        console.error("Google Tag Manager not is install or not load, please install Google Tag Manager")
        return;
    }
    
    // Get Form Submit
    document.addEventListener( 'wpcf7submit', event => {
        dataLayer('wpcf7submit', event.detail)
    })
}
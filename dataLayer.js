import {prepareDataLayerFormDataObject}  from  './util';

export default function (eventName, customEventData) {
    const prepareObjectFormData = prepareDataLayerFormDataObject(customEventData)
    window.dataLayer.push({
        'event': eventName,
        ...prepareObjectFormData,
    })
}    
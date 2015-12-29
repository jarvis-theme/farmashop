$('#twitter').sharrre({
  share: {
    twitter: true
  },
  enableHover: false,
  enableTracking: false,
  enableCounter: false,
  buttons: { 
    twitter: {via: 'jarvis_store', count: 'vertical'}
  },
  click: function(api, options){
    api.simulateClick();
    api.openPopup('twitter');
  }
});
$('#twitter-produk').sharrre({
  share: {
    twitter: true
  },
  enableHover: false,
  enableTracking: false,
  enableCounter: false,
  buttons: { 
    twitter: {via: 'jarvis_store', count: 'horizontal'}
  },
  click: function(api, options){
    api.simulateClick();
    api.openPopup('twitter');
  }
});
$('#facebook').sharrre({
  share: {
    facebook: true
  },
  buttons: {
    facebook: {layout: 'box_count'}
  },
  enableHover: false,
  enableTracking: false,
  enableCounter: false,
  click: function(api, options){
    api.simulateClick();
    api.openPopup('facebook');
  }
});
$('#facebook-produk').sharrre({
  share: {
    facebook: true
  },
  buttons: {
    facebook: {layout: 'button_count'}
  },
  enableHover: false,
  enableTracking: false,
  enableCounter: false,
  click: function(api, options){
    api.simulateClick();
    api.openPopup('facebook');
  }
});
$('#googleplus').sharrre({
  share: {
    googlePlus: true
  },
  buttons: {
    googlePlus: {size: 'tall', annotation:'bubble'}
  },
  enableHover: false,
  enableTracking: false,
  enableCounter: false,
  click: function(api, options){
    api.simulateClick();
    api.openPopup('googlePlus');
  }
});
$('#gplus').sharrre({
  share: {
    googlePlus: true
  },
  buttons: {
    googlePlus: {size: 'medium', annotation:'bubble'}
  },
  enableHover: false,
  enableTracking: false,
  enableCounter: false,
  click: function(api, options){
    api.simulateClick();
    api.openPopup('googlePlus');
  }
});
$('#delicious').sharrre({
  share: {
    delicious: true
  },
  buttons: {
    delicious: {size: 'tall'}
  },
  enableHover: false,
  enableTracking: false,
  enableCounter: false
});
$('#delicious-produk').sharrre({
  share: {
    delicious: true
  },
  buttons: {
    delicious: {size: 'medium'}
  },
  enableHover: false,
  enableTracking: false,
  enableCounter: false
});
$('#stumbleupon').sharrre({
  share: {
    stumbleupon: true
  },
  buttons: {
    stumbleupon: {layout: '5'}
  },
  enableHover: false,
  enableTracking: false,
  enableCounter: false
});
$('#stumbleupon-produk').sharrre({
  share: {
    stumbleupon: true
  },
  buttons: {
    stumbleupon: {layout: '3'}
  },
  enableHover: false,
  enableTracking: false,
  enableCounter: false
});
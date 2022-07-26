//Check all list
function checkAll(source) {
    var checkboxes = document.querySelectorAll('#select');
    for(var i=0;i<checkboxes.length;i++) {
      checkboxes[i].checked = source.checked;
    }
  }
export const get_info = () => {
    const lis = document.getElementsByClassName('list-group-item list-group-item-warning');

    function alertList() {
        let e = event.target;
        if (e.classList.contains('list-group-item-warning')) {
            e.classList.remove('list-group-item-warning');
            e.classList.add('list-group-item-primary');
        } else {
            e.classList.remove('list-group-item-primary');
            e.classList.add('list-group-item-warning');
        }
    }

    for (var li of lis) {
        li.addEventListener("click", alertList, false);
    }
};
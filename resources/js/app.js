import './bootstrap';

document.querySelectorAll('input[name="mailing-list"]').forEach((radio) => {
  radio.addEventListener('change', function () {
    const notice = document.getElementById('opt-out-notice');
    if (document.getElementById('opt-out').checked) {
      notice.style.maxHeight = (notice.scrollHeight + 40) + "px";
      notice.style.paddingTop = "20px";
      notice.style.paddingBottom = "20px";
    } else {
      notice.style.maxHeight = "0px";

      notice.style.paddingTop = "0";
      notice.style.paddingBottom = "0";
    }
  });
});

const readMore = document.getElementById('read-more');
if (readMore) {
    readMore.addEventListener('click', function (ev) {
        ev.preventDefault();

        document.querySelectorAll('.hidden').forEach(paragraph => {
            paragraph.style.display = 'block';
            setTimeout(() => {
                paragraph.classList.add('show');
            }, 10);
        });

        this.style.display = 'none';
    });
}

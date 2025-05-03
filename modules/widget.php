<?php if ($nanoNodeAccount): ?>
<?php if ($widgetType == 'qr'): ?>

<img src="https://quickchart.io/qr?text=nano:<?php echo $nanoNodeAccount; ?>&size=250" style="max-width:250px; display:block; margin: 0 0 0 auto;" />

<?php elseif($widgetType == 'monkey'): ?>

<img src="https://monkey.banano.cc/api/v1/monkey/<?php echo $nanoNodeAccount; ?>" style="max-width:250px; display:block; margin: 0 0 0 auto;" />

<?php endif; ?>
<?php endif; ?>

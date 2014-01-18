<?php
    require_once('../includes/header.php');
?>

<div class="styleguide">
    <h3 class="styleguide__header">
        <span class="styleguide__title">Alert</span>
    </h3>

    <div class="styleguide__description">
        <p>These are boxes to help users see messages they need to pay attention to</p>
    </div>

    <div class="styleguide__elements">
        <div class="styleguide__element">
            <div class="alert">
                Body
            </div>
        </div>
        <div class="styleguide__element styleguide__element--modifier">
            <span class="styleguide__element__modifier-label">.error</span>
            <div class="alert alert--error">
                Body
            </div>
        </div>
    </div>

    <div class="styleguide__html">
        <pre class="styleguide__code"><code>&lt;div class="alert $modifierClass"&gt;
    Body
&lt;/div&gt;</code></pre>
    </div>
</div>

<?php
    require_once('../includes/footer.php');

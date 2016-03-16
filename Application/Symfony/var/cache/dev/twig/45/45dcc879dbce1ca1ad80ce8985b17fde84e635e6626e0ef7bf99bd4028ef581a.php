<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_24d5c9d92809ea663e64669e6e51d63626dd834c4ea5c552aa4a4ecfab1c8f3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32e5114166833a0ea87b0af6398b68b49d46903d89ba59c2e36ce2aa5e91f01c = $this->env->getExtension("native_profiler");
        $__internal_32e5114166833a0ea87b0af6398b68b49d46903d89ba59c2e36ce2aa5e91f01c->enter($__internal_32e5114166833a0ea87b0af6398b68b49d46903d89ba59c2e36ce2aa5e91f01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_32e5114166833a0ea87b0af6398b68b49d46903d89ba59c2e36ce2aa5e91f01c->leave($__internal_32e5114166833a0ea87b0af6398b68b49d46903d89ba59c2e36ce2aa5e91f01c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php $method = strtoupper($method) ?>*/
/* <?php $form_method = $method === 'GET' || $method === 'POST' ? $method : 'POST' ?>*/
/* <form name="<?php echo $name ?>" method="<?php echo strtolower($form_method) ?>"<?php if ($action !== ''): ?> action="<?php echo $action ?>"<?php endif ?><?php foreach ($attr as $k => $v) { printf(' %s="%s"', $view->escape($k), $view->escape($v)); } ?><?php if ($multipart): ?> enctype="multipart/form-data"<?php endif ?>>*/
/* <?php if ($form_method !== $method): ?>*/
/*     <input type="hidden" name="_method" value="<?php echo $method ?>" />*/
/* <?php endif ?>*/
/* */

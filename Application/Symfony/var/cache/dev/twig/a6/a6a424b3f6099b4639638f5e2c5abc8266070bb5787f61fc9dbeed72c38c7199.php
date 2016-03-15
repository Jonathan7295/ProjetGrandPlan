<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_6c1b1933ebc887d319af6dbda0384c23ac51a7ad2a9c30669dbd4c4d58be9611 extends Twig_Template
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
        $__internal_500f5d1fcd224494c10516deb01e6701c5865a77c3eb5e3b8f38062ba991547e = $this->env->getExtension("native_profiler");
        $__internal_500f5d1fcd224494c10516deb01e6701c5865a77c3eb5e3b8f38062ba991547e->enter($__internal_500f5d1fcd224494c10516deb01e6701c5865a77c3eb5e3b8f38062ba991547e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_500f5d1fcd224494c10516deb01e6701c5865a77c3eb5e3b8f38062ba991547e->leave($__internal_500f5d1fcd224494c10516deb01e6701c5865a77c3eb5e3b8f38062ba991547e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */

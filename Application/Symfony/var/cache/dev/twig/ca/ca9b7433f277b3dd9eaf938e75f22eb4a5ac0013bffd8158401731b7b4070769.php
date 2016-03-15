<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b52e1244abd8dd8a5a71fa1ef158bee50053d82cda0170d5796a3fd7e924b01b extends Twig_Template
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
        $__internal_ef9255c0ad4f1ad1320f871a196f450c9f68e8046f6b2131bc0c3b8d5c688a80 = $this->env->getExtension("native_profiler");
        $__internal_ef9255c0ad4f1ad1320f871a196f450c9f68e8046f6b2131bc0c3b8d5c688a80->enter($__internal_ef9255c0ad4f1ad1320f871a196f450c9f68e8046f6b2131bc0c3b8d5c688a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ef9255c0ad4f1ad1320f871a196f450c9f68e8046f6b2131bc0c3b8d5c688a80->leave($__internal_ef9255c0ad4f1ad1320f871a196f450c9f68e8046f6b2131bc0c3b8d5c688a80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

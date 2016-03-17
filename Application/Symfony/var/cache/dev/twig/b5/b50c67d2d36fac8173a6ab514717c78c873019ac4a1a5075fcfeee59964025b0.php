<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_3cb9bc6d5409179b97019a63d5a5a3ecb5d83194c0039e793ca2b1679452c910 extends Twig_Template
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
        $__internal_d49f3dcc6e7ef43ec02001f7ecbbf63539cfbecbf5998efcc7e13ab5bb2be5ab = $this->env->getExtension("native_profiler");
        $__internal_d49f3dcc6e7ef43ec02001f7ecbbf63539cfbecbf5998efcc7e13ab5bb2be5ab->enter($__internal_d49f3dcc6e7ef43ec02001f7ecbbf63539cfbecbf5998efcc7e13ab5bb2be5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_d49f3dcc6e7ef43ec02001f7ecbbf63539cfbecbf5998efcc7e13ab5bb2be5ab->leave($__internal_d49f3dcc6e7ef43ec02001f7ecbbf63539cfbecbf5998efcc7e13ab5bb2be5ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */

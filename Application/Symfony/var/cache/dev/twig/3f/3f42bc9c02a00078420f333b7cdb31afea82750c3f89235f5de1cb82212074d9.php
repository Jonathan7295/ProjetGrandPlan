<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_75d448957d7eb19ca5485324f685d4866c7ad9ea834fcd2d1a1549b6cb273b3e extends Twig_Template
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
        $__internal_4c08ea0936b8dba6a254e338cab661fd8f859d5f920564378341ba15959d0651 = $this->env->getExtension("native_profiler");
        $__internal_4c08ea0936b8dba6a254e338cab661fd8f859d5f920564378341ba15959d0651->enter($__internal_4c08ea0936b8dba6a254e338cab661fd8f859d5f920564378341ba15959d0651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_4c08ea0936b8dba6a254e338cab661fd8f859d5f920564378341ba15959d0651->leave($__internal_4c08ea0936b8dba6a254e338cab661fd8f859d5f920564378341ba15959d0651_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->block($form, 'button_widget',  array('type' => isset($type) ? $type : 'reset')) ?>*/
/* */

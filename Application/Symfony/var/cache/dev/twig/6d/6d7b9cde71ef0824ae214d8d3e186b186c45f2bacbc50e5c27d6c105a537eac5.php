<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_a4bc799502f727fdb23c96a6a55b821e7eda668051706f735e2f42106fd66226 extends Twig_Template
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
        $__internal_b2971d06187af831ba0c6e77317928e91c67f916e4e59cf2c83830bbc40a3805 = $this->env->getExtension("native_profiler");
        $__internal_b2971d06187af831ba0c6e77317928e91c67f916e4e59cf2c83830bbc40a3805->enter($__internal_b2971d06187af831ba0c6e77317928e91c67f916e4e59cf2c83830bbc40a3805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b2971d06187af831ba0c6e77317928e91c67f916e4e59cf2c83830bbc40a3805->leave($__internal_b2971d06187af831ba0c6e77317928e91c67f916e4e59cf2c83830bbc40a3805_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */

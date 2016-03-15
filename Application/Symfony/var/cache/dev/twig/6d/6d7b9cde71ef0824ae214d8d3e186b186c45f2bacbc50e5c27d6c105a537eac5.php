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
        $__internal_be1698944c377f8337ad6a87114c32bb56a2ae059af4720fe2f99a070e67c469 = $this->env->getExtension("native_profiler");
        $__internal_be1698944c377f8337ad6a87114c32bb56a2ae059af4720fe2f99a070e67c469->enter($__internal_be1698944c377f8337ad6a87114c32bb56a2ae059af4720fe2f99a070e67c469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_be1698944c377f8337ad6a87114c32bb56a2ae059af4720fe2f99a070e67c469->leave($__internal_be1698944c377f8337ad6a87114c32bb56a2ae059af4720fe2f99a070e67c469_prof);

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

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
        $__internal_c9c18c6675b51b52c48866c5c0920bb9ee08f7326c03f75c869f30ee4923931b = $this->env->getExtension("native_profiler");
        $__internal_c9c18c6675b51b52c48866c5c0920bb9ee08f7326c03f75c869f30ee4923931b->enter($__internal_c9c18c6675b51b52c48866c5c0920bb9ee08f7326c03f75c869f30ee4923931b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c9c18c6675b51b52c48866c5c0920bb9ee08f7326c03f75c869f30ee4923931b->leave($__internal_c9c18c6675b51b52c48866c5c0920bb9ee08f7326c03f75c869f30ee4923931b_prof);

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

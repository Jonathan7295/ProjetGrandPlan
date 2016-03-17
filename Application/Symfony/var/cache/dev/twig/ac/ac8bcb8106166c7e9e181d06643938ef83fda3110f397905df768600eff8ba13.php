<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_dd0733619cd3a157f85525882d93a55764712b7734753aa42c7b27723794742f extends Twig_Template
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
        $__internal_0477482893860808d6bd77289d1ca40ec276d001e387f4c1dce6654154d7bb94 = $this->env->getExtension("native_profiler");
        $__internal_0477482893860808d6bd77289d1ca40ec276d001e387f4c1dce6654154d7bb94->enter($__internal_0477482893860808d6bd77289d1ca40ec276d001e387f4c1dce6654154d7bb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0477482893860808d6bd77289d1ca40ec276d001e387f4c1dce6654154d7bb94->leave($__internal_0477482893860808d6bd77289d1ca40ec276d001e387f4c1dce6654154d7bb94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */

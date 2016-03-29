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
        $__internal_156b37255ba0fe277b419658fae08c03a8036b1c930c613dfd7bd4d16801d1de = $this->env->getExtension("native_profiler");
        $__internal_156b37255ba0fe277b419658fae08c03a8036b1c930c613dfd7bd4d16801d1de->enter($__internal_156b37255ba0fe277b419658fae08c03a8036b1c930c613dfd7bd4d16801d1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_156b37255ba0fe277b419658fae08c03a8036b1c930c613dfd7bd4d16801d1de->leave($__internal_156b37255ba0fe277b419658fae08c03a8036b1c930c613dfd7bd4d16801d1de_prof);

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

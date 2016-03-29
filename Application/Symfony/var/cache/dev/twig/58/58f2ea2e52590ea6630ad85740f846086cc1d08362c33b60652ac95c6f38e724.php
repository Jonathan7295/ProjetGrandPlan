<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_dfbf9f5d8fcd6c261203e78dc796b93321b6a643db9ac56f181773cf62c39728 extends Twig_Template
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
        $__internal_90e846c73aa560c8bebe4ba0011d5b15f48c50be23e3b00419b547d199032095 = $this->env->getExtension("native_profiler");
        $__internal_90e846c73aa560c8bebe4ba0011d5b15f48c50be23e3b00419b547d199032095->enter($__internal_90e846c73aa560c8bebe4ba0011d5b15f48c50be23e3b00419b547d199032095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_90e846c73aa560c8bebe4ba0011d5b15f48c50be23e3b00419b547d199032095->leave($__internal_90e846c73aa560c8bebe4ba0011d5b15f48c50be23e3b00419b547d199032095_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */

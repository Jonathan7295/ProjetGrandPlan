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
        $__internal_1c0b48662dfef6805decdbe6c1b64767ae4df5a6e7402d1a899b9a0948faddda = $this->env->getExtension("native_profiler");
        $__internal_1c0b48662dfef6805decdbe6c1b64767ae4df5a6e7402d1a899b9a0948faddda->enter($__internal_1c0b48662dfef6805decdbe6c1b64767ae4df5a6e7402d1a899b9a0948faddda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1c0b48662dfef6805decdbe6c1b64767ae4df5a6e7402d1a899b9a0948faddda->leave($__internal_1c0b48662dfef6805decdbe6c1b64767ae4df5a6e7402d1a899b9a0948faddda_prof);

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

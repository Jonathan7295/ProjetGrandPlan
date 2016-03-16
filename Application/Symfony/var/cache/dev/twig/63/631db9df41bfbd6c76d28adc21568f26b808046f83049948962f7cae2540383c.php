<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_ccbeb8372252bce02309926112624a13b91052f0ca7af518219ab76ac64b973b extends Twig_Template
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
        $__internal_ab033a4e0421ec2e7f1aa91402e4db8a517fb70287db00e2839e2b71ee5ee424 = $this->env->getExtension("native_profiler");
        $__internal_ab033a4e0421ec2e7f1aa91402e4db8a517fb70287db00e2839e2b71ee5ee424->enter($__internal_ab033a4e0421ec2e7f1aa91402e4db8a517fb70287db00e2839e2b71ee5ee424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ab033a4e0421ec2e7f1aa91402e4db8a517fb70287db00e2839e2b71ee5ee424->leave($__internal_ab033a4e0421ec2e7f1aa91402e4db8a517fb70287db00e2839e2b71ee5ee424_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */

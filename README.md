WordPress theme for climateaction.tech
===

This is a [child theme](https://developer.wordpress.org/themes/advanced-topics/child-themes/), which uses [Neve](https://themeisle.com/themes/neve/) as the parent.


Releasing new changes
---

We use an automated Git based release process. This means that as commits are merged into the repository we will deploy them automatically. 

There are three important branches:
* `main` the default branch, all features PRs will merge into this branch
* `staging` branch deploys to [Staging](https://cat-staging.onyx-sites.io/)
* `production` branch deploys to [Production](https://climateaction.tech/)


**Contributor Workflow**

1. Developer raises from their feature branch PR against the repository.
2. Reviewed by project maintainers
3. *(Optional)* For design changes, a designer working on the feature must review on staging
4. Once approval is received, the owning developer merges their PR into the default branch
5. An admin user **manually** merges a Release PR into the production branch.

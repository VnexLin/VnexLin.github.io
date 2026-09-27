# 留白静态博客

可直接部署到 GitHub Pages 的纯静态博客，无需 Node.js 或数据库。

## 内容配置

- `config/site.json`：站点名称、介绍、导航与社交链接
- `config/posts.json`：文章列表与正文

编辑这两个 JSON 文件后推送到 GitHub，GitHub Pages 会自动使用新内容。

## 本地内容编辑器

`local-admin/` 是仅供本机使用的编辑器，已经被 `.gitignore` 忽略，不会被推送或部署。用浏览器打开 `local-admin/index.html`，首次选择导入 `config/site.json` 和 `config/posts.json`，即可新建、编辑或删除文章；它的修改仅保存在当前浏览器。

完成编辑后，分别点击“导出 site.json”和“导出 posts.json”，将下载文件替换到 `config/` 中的对应文件，然后提交并推送。GitHub Pages 会自动发布新的内容。

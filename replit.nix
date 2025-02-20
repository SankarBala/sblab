{ pkgs }: {
  deps = [
    pkgs.sqlite
    pkgs.nodePackages.prettier
   pkgs.wget
   pkgs.php82Packages.composer
    pkgs.php82
  ];
}